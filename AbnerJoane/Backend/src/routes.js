const express = require('express');
const router = express.Router();

const casamentoController = require('./controllers/casamentoController')

router.get('/pessoa', casamentoController.buscarTodos);
router.get('/pessoa/:codigo', casamentoController.buscarUm);

module.exports = router;

