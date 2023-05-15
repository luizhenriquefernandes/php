<?php
/* Programa V1
 * Luiz Henrique Fernandes data 18/02/2022
 * interface por si só é uma classe abstrata

*/

interface Publicacao
{
    public function abrirLivro();
    public function fecharLivro();
    public function folhear();
    public function avancarPagina();
    public function voltarPagina();

}
