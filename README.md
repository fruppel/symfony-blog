# Blog

## Development environment

### Docker container

Access local database
```
docker compose exec database psql app app   
```

#### PostgreSQL

Connect to database
```
\c app
```

List tables
```
app=# \dt
```
Describe table
```
app=# \d+ posts
```
