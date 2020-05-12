const express = require('express')
const server = express()

server.get('/', (req, res) => res.send('Hello from express'))

server.listen(3000, () => console.log('Express server listen on port 3000'))

