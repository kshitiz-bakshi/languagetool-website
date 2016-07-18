<!doctype html>
<html lang=pt>
<head>
    <?php
    $enable_textcheck = 1;
    $enable_fancybox = 1;
    $checkDefaultLang = "pt";
    $checkDefaultLangWithCountry = "pt-PT";
    // ------------- TRANSLATIONS START HERE -------------
    $title = "LanguageTool Corrector Gramatical e de Estilo";
    // TODO: translate language names and sort them alphabetically (by translation, not by code)
    $checkLanguage = array(
        'ast' => 'Asturian',
        'be'  => 'Belarusian',
        'br'  => 'Breton',
        'ca'  => 'Catalan',
        'zh'  => 'Chinese',
        'da'  => 'Danish',
        'nl'  => 'Dutch',
        'en-US'  => 'English',
        'eo'  => 'Esperanto',
        'fr'  => 'French',
        'gl'  => 'Galician',
        'de-DE'  => 'German',
        'el'  => 'Greek',
        'is'  => 'Icelandic',
        'it'  => 'Italian',
        'ja'  => 'Japanese',
        'km'  => 'Khmer',
        'lt'  => 'Lithuanian',
        'ml'  => 'Malayalam',
        'fa'  => 'Persian',
        'pl'  => 'Polish',
        'pt'  => 'Português',
        'pt-BR'  => 'Português Brasileiro',
        'ro'  => 'Romanian',
        'ru'  => 'Russian',
        'sk'  => 'Slovak',
        'sl'  => 'Slovenian',
        'es'  => 'Spanish',
        'sv'  => 'Swedish',
        'tl'  => 'Tagalog',
        'uk'  => 'Ukrainian'
    );
    $checkSubmitButtonValue = "Verificar Texto";
    $checkSubmitButtonTitle = "Verificar Texto";    //TODO: add "also possible by using Ctrl+Return"
    $toggleFullscreenMode = "Alternar para o modo de ecrã inteiro";
    $introText1 = "O <strong>LanguageTool</strong> é <em>software</em> de Código Aberto de verificação gramatical para o Inglês, Francês, Alemão, Polaco, e mais de <a href='/languages/'>20 idiomas</a>.";
    $introText2 = "";
    $downloadHeadline = "Baixar";
    $downloadRequiresJava = "Requer Java {version}+";
    $downloadTitle = "Para <strong>LibreOffice</strong> e <strong>OpenOffice</strong>";
    $downloadTitleStandAlone = "Independente para <strong>Desktop</strong>";
    $downloadLabelFx = "Para <strong>Firefox</strong>";
    $downloadLabelChrome = "Para <strong>Chrome</strong>";
    $downloadLabelBrowserAddOn = "Extra do Navegador";
    $checklistText = "Por favor veja a <a href='/issues/'>lista de problemas comuns</a> se ocorrer problemas.";
    $otherDownloadsText = "Baixar <a href='/download/'>versões anteriores</a> ou <a href='/download/snapshots/?C=M;O=D'>builds diários</a>.";
    $webstartText = "Iniciar com o <a href='/webstart/web/LanguageTool.jnlp'>Java WebStart</a>.";
    // ------------- TRANSLATIONS END HERE -------------
    ?>
    <?php include("../../include/header.php"); ?>
</head>
<body>
<?php include("../../include/page_start.php"); ?>

<div id="languageContent">

<a title="O LanguageTool instalado como um add-on no LibreOffice 3.3" class="fancyboxImage"
   href="../screenshots/art/screenshot_lo3.png"><img style="margin-left: 15px" width="200" height="144" align="right"
   src="../screenshots/art/screenshot_lo3_very_small.png" alt="Screenshot do LanguageTool"/></a>



<h2>Descarregar</h2>

<p>Usar o LanguageTool localmente requer o <a href="http://www.java.com/en/download/manual.jsp">Java&nbsp;<span lang="en-gb">8</span></a> ou acima.
<strong>Problemas? Por favor leia a <a href="../issues">lista de problemas comuns</a>.</strong></p>

<noscript class="warning">Por favor ative o Javascript - é usado para mostrar algumas dicas após o inicio de uma transferência</noscript>

    <!--
    <div class="downloadSection">
    <table width="90%">
        <td valign="top">
          <ul style="padding-left: 20px">
            <li><strong>Recomendamos usar o
			<a href="http://www.libreoffice.org/download">LibreOffice 3.5.4</a></strong> (ou 
			acima) ou o
              <strong><a href="http://www.openoffice.org/download/">Apache OpenOffice 3.4.1</a></strong> (ou 
			acima) visto as versões anteriores terem um bug que causa uma pausa 
			no início.</li>
            <li>Usa <em>Tools -&gt; Extension Manager -&gt; Add...</em> no LibreOffice/OpenOffice 
			para instalar este ficheiro</li>
            <li><strong>Reinicia o OpenOffice/LibreOffice</strong> após a 
			instalação da extensão</li>
            <li>Se você usa o LibreOffice 3.5.x e quer verificar textos em 
			Inglês: Use <em>Options -> Language Settings -> Writing Aids -> Edit...</em> 
			para desativar o LightProof e ativar o LanguageTool para o Inglês</li>
          </ul>
        </td>
        <td></td>
        <td valign="top">
          <ul style="padding-left: 20px">
            <li>Faça unzip ao ficheiro e inicie o languagetool.jar com um 
			duplo clique. Veja também <a href="../usage/">outras formas de usar o LanguageTool</a>.</li>
          </ul>
        </td>
        <td valign="top">
          <div style="margin-left: 5px">
              Verifica o texto selecionado em páginas web e<br/>em campos de texto. Não necessita Java!
          </div>
        </td>
      </tr>
    </table>
</div>
-->

<p>Builds diários não testados, do estado atual de desenvolvimento, estão 
disponíveis na
<a href="../download/snapshots/?C=M;O=D">directoria de snapshots</a>
 (<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-standalone/CHANGES.txt">CHANGES.txt</a>).
 Versões antigas continuam disponíveis no <a href="../download/">diretório de download</a>.</p>


<h3>Licença &amp; Código-Fonte</h3>

<p>O LanguageTool está disponível gratuitamente sob a <a href="http://www.fsf.org/licensing/licenses/lgpl.html#SEC1">LGPL</a>.
O código-fonte está disponível em <a href="https://github.com/languagetool-org/">GitHub</a>.</p>

</div>

<?php include("../../include/page_end.php"); ?>

</body>
</html>
