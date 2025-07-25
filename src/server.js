const express = require('express');
const app = express();
const apiRoutes = require('./routes/index');

app.use(express.json());
// app.use('/api', apiRoutes);

app.listen(3000, () => console.log('API rodando na porta 3000'));
