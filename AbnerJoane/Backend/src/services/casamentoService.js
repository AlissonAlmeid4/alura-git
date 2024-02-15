const db = require('../db')
module.exports = {
    buscarTodos: ()=>{
        return new Promise((aceito, rejeitado)=>{

            db.query('SELECT * FROM pessoa', (error, results)=>{
                if(error){ rejeitado(error); return; }
                aceito(results)
            });
        });
    },
    buscarUm: (codigo) => {
        return new Promise((aceito, rejeitado)=>{
            db.query('SELECT * FROM pessoa WHERE codigo = ?', [codigo], (error, results)=>{
                if(error){ rejeitado(error); return; }
                if(results.length > 0){
                    aceito(results[0]);
                } else{
                    aceito(false);
                }
            })
        })
    },
    inserir: (nome, celular, tipo) => {
        return new Promise((aceito, rejeitado)=>{
            db.query('INSERT INTO pessoa (nome, celular, tipo)  VALUES (?,?,?)',
                [nome, celular, tipo], 
                (error, results)=>{
                    if(error){ rejeitado(error); return; }
                        aceito(results.insertCodigo);
            })
        })
    },
    alterar: (codigo, nome, celular, tipo) => {
        return new Promise((aceito, rejeitado)=>{
            db.query('UPDATE pessoa SET nome = ?, celular = ?, tipo = ? WHERE codigo = ?',
                [nome, celular, tipo, codigo], 
                (error, results)=>{
                    if(error){ rejeitado(error); return; }
                        aceito(results);
            })
        })
    },
    excluir: (codigo) => {
        return new Promise((aceito, rejeitado)=>{
            db.query('DELETE FROM pessoa WHERE codigo = ?',
                [codigo], 
                (error, results)=>{
                    if(error){ rejeitado(error); return; }
                        aceito(results);
            })
        })
    },


    //presentes

    buscarTodosPresente: ()=>{
        return new Promise((aceito, rejeitado)=>{

            db.query('SELECT * FROM presente', (error, results)=>{
                if(error){ rejeitado(error); return; }
                aceito(results)
            });
        });
    },
    buscarUmPresente: (nome) => {
        return new Promise((aceito, rejeitado)=>{
            db.query('SELECT * FROM presente WHERE nome = ?', [nome], (error, results)=>{
                if(error){ rejeitado(error); return; }
                if(results.length > 0){
                    aceito(results[0]);
                } else{
                    aceito(false);
                }
            })
        })
    },
    inserirPresente: (nome, celular, presente) => {
        return new Promise((aceito, rejeitado)=>{
            db.query('INSERT INTO presente (nome, celular, presente)  VALUES (?,?,?)',
                [nome, celular, presente], 
                (error, results)=>{
                    if(error){ rejeitado(error); return; }
                        aceito(results.insertCodigo);
            })
        })
    },
    excluirPresente: (codigo) => {
        return new Promise((aceito, rejeitado)=>{
            db.query('DELETE FROM presente WHERE codigo = ?',
                [codigo], 
                (error, results)=>{
                    if(error){ rejeitado(error); return; }
                        aceito(results);
            })
        })
    },

    //Mural

    buscarTodosMural: ()=>{
        return new Promise((aceito, rejeitado)=>{

            db.query('SELECT * FROM mural', (error, results)=>{
                if(error){ rejeitado(error); return; }
                aceito(results)
            });
        });
    },
    buscarUmMural: (codigo) => {
        return new Promise((aceito, rejeitado)=>{
            db.query('SELECT * FROM mural WHERE codigo = ?', [codigo], (error, results)=>{
                if(error){ rejeitado(error); return; }
                if(results.length > 0){
                    aceito(results[0]);
                } else{
                    aceito(false);
                }
            })
        })
    },
    inserirMural: (nome, celular, parentesco, recado) => {
        return new Promise((aceito, rejeitado)=>{
            db.query('INSERT INTO mural (nome, celular, parentesco, recado)  VALUES (?,?,?,?)',
                [nome, celular, parentesco, recado], 
                (error, results)=>{
                    if(error){ rejeitado(error); return; }
                        aceito(results.insertCodigoMural);
            })
        })
    },
    alterarMural: (codigo, nome, celular, parentesco, recado) => {
        return new Promise((aceito, rejeitado)=>{
            db.query('UPDATE mural SET nome = ?, celular = ?, parentesco = ?, recado = ? WHERE codigo = ?',
                [nome, celular, parentesco, recado, codigo], 
                (error, results)=>{
                    if(error){ rejeitado(error); return; }
                        aceito(results);
            })
        })
    },
    excluirMural: (codigo) => {
        return new Promise((aceito, rejeitado)=>{
            db.query('DELETE FROM mural WHERE codigo = ?',
                [codigo], 
                (error, results)=>{
                    if(error){ rejeitado(error); return; }
                        aceito(results);
            })
        })
    }
};