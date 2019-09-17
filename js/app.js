
const express = require('express');
const app = express();
const Artist = require('./src/models/Menu.js');
const Artists = require('./src/models/Menu.js');

app.post('/menu', function (request, response) {
    response.send([]);
});

app.get('/menu/:id', function (request, response) {
    response.send([]);
});

app.get('/menu/:id/items', function (request, response) {
    response.send([]);
});

app.post('/menu/:id/items', function (request, response) {
    response.send([]);
});

app.get('/menu/:id/items/:id', function (request, response) {
    response.send([]);
});




const port = process.env.PORT || 3000;
app.listen(port, function () {
  console.log('app listening on port ' + port);
});
