### Build

```
docker-compose build
docker-compose up
```

### Stop & destroy

```
docker-compose stop
docker-compose rm -f
```

### Restore backup

##### 1. Copy backup to Docker Container

```
docker exec -it MSSQL_CONTAINER_ID mkdir /var/opt/mssql/backup
docker cp BACKUP.bak MSSQL_CONTAINER_ID:/var/opt/mssql/backup
```

##### 2. Restore
```
docker exec -it MSSQL_CONTAINER_ID 'bash'

/opt/mssql-tools/bin/sqlcmd -S localhost -U SA -P 'Password'

> RESTORE DATABASE MedAll FROM DISK='/var/opt/mssql/backup/medall_17_12_2020.bak' WITH MOVE 'MedAll' TO '/var/opt/mssql/data/MedAll.mdf', MOVE 'MedAll_log' TO '/var/opt/mssql/data/MedAll_log.ldf'
> GO
```

##### 3. Create DB User

```
1> USE MedAll;
2> GO

1> CREATE LOGIN medall WITH PASSWORD = 'Pass';
2> GO

1> CREATE USER medall FOR LOGIN medall;
2> GO

1> ALTER SERVER ROLE sysadmin ADD MEMBER medall;
2> GO
```