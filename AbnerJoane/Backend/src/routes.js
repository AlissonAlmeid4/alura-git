const express = require('express');
const router = express.Router();

const casamentoController = require('./controllers/casamentoController')

router.get('/pessoa', casamentoController.buscarTodos);
router.get('/pessoa/:codigo', casamentoController.buscarUm);
router.post('/pessoa', casamentoController.inserir);
router.put('/pessoa/:codigo', casamentoController.alterar);
router.delete('/pessoa/:codigo', casamentoController.excluir);

router.get('/presente', casamentoController.buscarTodosPresente);
router.get('/presente/:nome', casamentoController.buscarUmPresente);
router.post('/presente', casamentoController.inserirPresente);
router.delete('/presente/:codigo', casamentoController.excluirPresente);

router.get('/mural', casamentoController.buscarTodosMural);
router.get('/mural/:codigo', casamentoController.buscarUmMural);
router.post('/mural', casamentoController.inserirMural);
router.put('/mural/:codigo', casamentoController.alterarMural);
router.delete('/mural/:codigo', casamentoController.excluirMural);

module.exports = router;

