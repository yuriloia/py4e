<?php
use \Tsugi\Core\LTIX;
use \Tsugi\UI\Output;

require_once "top.php";
require_once "nav.php";
?>
<div id="container">
<h1>Python for Everybody</h1>
<?php if ( isset($_SESSION['id']) ) { ?>
<p>
Bem-vindo ao meu Curso Online Aberto e Massivo (Massive Open Online Course - MOOC) do Python para Todos. 
Agora que entrou na sua conta, você pode acessar os recursos online do curso nesse site.
<ul class="list-group">
<li class="list-group-item">
Ao passo que você assiste às <a href="lessons">Aulas</a> do curso, você poderá acessar links adicionais para
os corretores automáticos da lição.  Você poderá tentar enviar um código para o corretor e obter uma nota.</li>
<li class="list-group-item">
Você pode acompanhar seu progresso por meio da ferramenta <a href="assignments">Tarefas</a>
e quando você completar um grupo de atividades, você ganhará uma <a href="badges">Medalha</a>.
Você poderá baixar essas medalhas e expô-las no seu site ou referenciar as URLs das medalhas aqui deste site.</li>
<li class="list-group-item">
Há um 
<a href="https://disqus.com/home/channel/pythonforeverybody/" target="_blank">fórum para discussão online</a>
hospedado pelo Disqus.</li>
<li class="list-group-item">
Se você deseja usar esses materiais licenciados nas suas próprias aulas, você pode 
<a href="materials.php">baixar ou referenciar o link</a> do conteúdo nesse site,
<a href="tsugi/cc/export.php">exportar o material do curso</a> pelo
IMS Common Cartridge®, ou acessar com uma 
<a href="tsugi/admin/key/index.php">chave ou senha</a> as ferramentas de ensino
IMS Learning Tools Interoperability® (LTI®) para executar os 
corretores automáticos no seu Sistema de Gestão de Aprendizado (SGA).
</li>
</ul>
<?php } else { ?>
<p>
Olá e seja bem vindo ao meu site, aqui você pode acessar meus materiais relacionados ao livro grátis
<a href="book.php">Python para todos</a>.  Você pode se candidatar para um certificado ao participar do curso
<a href="https://www.coursera.org/specializations/python" target="_blank">Especialização Python para Todos</a> no Coursera 
ou 
<a href="https://www.edx.org/course/programming-for-everybody-getting-started-with-python" target="_blank">Python para Todos - Introdução</a> on edX.</p>
<p>
Você pode usar esse site de várias maneiras:
<ul class="list-group">
<li class="list-group-item">
Você pode explorar meus vídeos e materiais do curso em <a href="lessons">Aulas</a>.  Os materiais que desenvolvi
para essas aulas são todos licenciados pelo Creative Commons, então você pode baixar ou referenciar o link
das aulas ao incluí-las no seu ensino, caso deseje.</li>
<li class="list-group-item">
Se você <a href="tsugi/login.php">entrar</a> nesse site,
é como se você participasse de um curso grátis, aberto, global e online.
Você tem um boletim, atividades corrigidas automaticamente, um fórum para discussão e pode
ganhar medalhas pelo seu esforço.</li>
<li class="list-group-item">
Nós levamos sua privacidade á sério nesse site, você pode revisar nossa
<a href="privacy">Política de Privacidade</a> para obter mais detalhes.
</li>
<li class="list-group-item">
Se você deseja usar esses materiais licenciados nas suas próprias aulas, você pode 
<a href="materials.php">baixar ou referenciar ao link</a> do conteúdo nesse site,
<a href="tsugi/cc/export.php">exportar o material do curso</a> pelo
IMS Common Cartridge®, ou acessar com uma 
<a href="tsugi/admin/key/index.php">chave ou senha</a> as ferramentas de ensino
IMS Learning Tools Interoperability® (LTI®) para executar os 
corretores automáticos no seu Sistema de Gestão de Aprendizado (SGA).
</li>
<li class="list-group-item">
O código para esse site, incluindo os corretores automáticos, apresentações e conteúdo do curso está todo disponível no
<a href="https://github.com/csev/py4e" target="_blank">GitHub</a>.  Isso significa que você pode fazer sua própria cópia 
do site, publicar ele e misturá-lo ao seu gosto. Ainda mais legal, você pode traduzir
o site inteiro para o seu idioma e publicá-lo. Eu já forneço
algumas <a href="https://github.com/csev/py4e/blob/master/TRANSLATION.md" target="_new">
instruções em como traduzir esse curso</a> no meu repositório do GitHub.
</li>
</ul>
<?php } ?>
Esse site utiliza uma framework <a href="http://www.tsugi.org" target="_blank">Tsugi</a> 
para implementar um Sistema de Gestão de Aprendizado (SGA) e fornecer corretores automáticos.  
Se você está interessado em colaborar na construção desse tipo de site por conta própria, por favor confira o site
<a href="http://www.tsugi.org" target="_blank">tsugi.org</a> ou entre em contato comigo.
</p>
<!--
<?php
echo(Output::safe_var_dump($_SESSION));
var_dump($USER);
?>
-->
</div>
<?php $OUTPUT->footer();
