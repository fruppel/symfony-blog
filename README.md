# Blog

## Development environment

#### Assets
```
php bin/console tailwind:build --minify
php bin/console asset-map:compile
```

#### Docker container

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
