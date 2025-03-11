add to `/etc/hosts`

```bash
127.0.0.1 static.localhost
127.0.0.1 api.localhost
```

finally
```bash
docker-compose up -d
```

open browser
  - http://static.localhost → serve folder static/
	- http://api.localhost → serve API from api/public/
