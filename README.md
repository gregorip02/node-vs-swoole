# Node.js server vs Swoole server

Clone and install node dependencies.

```bash
git clone https://github.com/gregorip02/node-vs-swoole.git
cd node-vs-swoole
yarn
```

Setup docker containers.

```bash
docker-compose up -d
```

# AB Testing

If you not have the `ab` command install it.

```bash
apt-get update && apt-get install apache2-utils -y
```

Test node.js server.

```bash
ab -n 5000 -c 500 http://localhost:3000/
```

Test swoole server.
```bash
ab -n 5000 -c 500 http://localhost:3000/
```
