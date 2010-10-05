<div class="span-24 last">
<h2 style="background:#ffff99; padding:5px;">ELEIÇÕES 2010. A relação de prefeitos/gestores encaminhada à Justiça Eleitoral também está aqui. Veja os novos <a href="<?php echo url_for('doc') ?>">métodos disponíveis</a>.</h2>
<br>
<h1>Dados públicos são do público.</h1>
<p>O TCM/CE mais uma vez transforma o óbvio em realidade: abrimos os dados. Só que agora de uma maneira diferente, estamos possibilitando que programas de computador acessem os dados facilmente. O TCM/CE está disponibilizando os dados do SIM via Interface de Programação de Aplicativos (ou <a href="http://pt.wikipedia.org/wiki/API" target="blank">API</a> ). Acreditamos na criatividade coletiva e através dela temos a certeza que a comunidade tem condições de criar suas próprias aplicações fazendo uso dos dados da meneira que melhor lhe convier. E para isso, nada melhor que facilitar a criação desses aplicativos. Buscamos estabelecer contato com desenvolvedores interessados em criar seus próprios aplicativos usando os dados do TCM/CE, veja a seguir como.</p>
</div>
<div class="span-24">
<h2>Acessando os Dados Abertos</h2>
<p>O acesso aos dados aberto é feito através de nossa API, que consiste em endereços na Internet(url) onde os dados são disponibilizados em formatos XML, JSON, CSV e HTML. Prontos para serem aproveitados por outros aplicativos. Além disso, é possível realizar consulta através da passagem de parâmetros.</p>
<h2>URL Básica</h2>
<p>Para acessar os dados é preciso conhecer o endereço ou url básica.</p>
<br>
<p><code>http://api.tcm.ce.gov.br/sim/1_0/&lt;metodo&gt;.&lt;formato&gt;?&lt;campo1&gt;=&lt;valor1&gt;&&lt;campo2&gt;=&lt;valor2&gt;</code></p>
<br>
<p>Nota: Todos os dados enviados para nossa API devem estar codificados em UTF-8 e todos os dados retornados pela nossa API estarão codificados em UTF-8. Enviar dados em uma codificação diferente pode causar erros.</p>
<h2>Solicitando dados</h2>
<p>Utilizando a URL BÁSICA, para solicitar qualquer dado através da API, dois parâmetros são necessários: <i>&lt;metodo&gt;</i> e <i>&lt;formato&gt;</i>. O método indica qual informação você deseja e o define sua preferência em receber a resposta em HTML, XML, JSON ou CSV. Consulta nossa documentação para saber quais os <a href="<?php echo url_for('doc') ?>">métodos disponíveis</a>. Os parâmetros <i>campo</i> e <i>valor</i> são utilizados para filtrar os registros retornados pelos métodos. Atenção: por questões de performance, não é permitido listar TODOS OS DADOS através de alguns métodos. Verifique a documentação de cada método para saber que parâmetros são obrigatórios. A seguir temos dois exemplos de uso da API.</p>
<br/>
<code>Exemplo 1: Para listar todos os municipios no formato XML utilize a seguinte url 
<?php echo link_to('http://api.tcm.ce.gov.br/sim/1_0/municipios.xml','@api?version=1_0&method=municipios&sf_format=xml')?>
</code>
<br/><br/>
<code>Exemplo 2: Para listar todos os negociantes, em formato XML, que tem a palavra 'gasolina' no nome.<br/> 
<?php echo link_to('http://api.tcm.ce.gov.br/sim/1_0/negociantes.xml?nome_negociante=gasolina','@api?version=1_0&method=negociantes&sf_format=xml?nome_negociante=gasolina')?>
</code>
<br/><br/>
<h2>Recebendo a resposta</h2>
<p>As respostas seguirão duas estruturas bácicas: uma para os formatos XML e JSON, e outra para os formatos HTML e CSV. O código HTTP da resposta sempre será 200, mesmo quando houver erro.</p>
<h3>Resposta XML e JSON</h3>
<div class="span-5">
<pre class="code">
&lt;rsp stat=&quot;ok&quot;&gt;
    &lt;!-- conteudo --&gt;

&lt;/rsp&gt;</pre>

</div>
<div class="span-5 last">
<pre>
&quot;rsp&quot;: {
        &quot;_content&quot;: {
            /* conteudo */
        },
        &quot;stat&quot;: &quot;ok&quot;
    }
</pre>
</div>
<div class="span-24">
<h3>Resposta HTML e CSV</h3>
<p>Tanto as respostas em HTML quanto em CSV serão apresentadas como tabelas, onde a primeira linha contem o nome dos campos e as demais o conteúdo.
</div>
<div class="span-24">
<h2>Divirta-se!</h2>
<br>
</div>
</div>
