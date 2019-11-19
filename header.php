<div class='mob_header'>
    <div class="logo">
        <div class='menu_icon'>
          <span onClick='openMobHeader()'>☰</span>
        </div>

        <img src="<?= $path.'src/logo-white.png' ?>"/>
      </div>
    </div>
    <aside class="header">    
      <div class="logo">
        <img src="<?= $path.'src/logo-white.png' ?>"/>
      </div>

      <nav class="menu_container">
        <ul class='menu'>
          <li><span>CONSITEC</span>
            <ul class='submenu'>
              <li file='consitec/sobre'> <a href="<?= $path.'pages/consitec/sobre.php'?>">Sobre nós</a></li>
              <li file='consitec/estrutura'>Estrutura Organizacional</li>
              <li file='consitec/governanca'>Estrutura de Governança</li>
            </ul>
          </li>

          <li><span>GESTÃO</span>
            <ul class='submenu'>
              <li file='gestao/projetos'>de Projetos</li>
              <li file='gestao/riscos'>de Riscos</li>
              <li file='gestao/construcao'>de Construção/Supervisão</li>
              <li file='gestao/capacitacao'>Social: Capacitação</li>
              <li file='gestao/conhecimento'>Social: Conhecimento</li>
              <li file='gestao/comunidades'>Social: Comunidades do Entorno</li>
              <li file='gestao/capital'>Social: Capital Humano</li>
              <li file='gestao/seguranca'>Social: Segurança/Saúde</li>
            </ul>
          </li>

          <li><span>SERVIÇOS</span>
            <ul class='submenu'>
              <li file='servicos/preconstrucao'>Pré-Construção</li>
              <li file='servicos/civil'>Construção Civil</li>
              <li file='servicos/ti'>Tecnologia e Informação</li>
              <li file='servicos/eng_civil'>Engenharia Civil</li>
              <li file='servicos/eng_estrutural'>Engenharia Estrutural</li>
              <li file='servicos/eng_eletrica'>Engenharia Elétrica</li>
              <li file='servicos/eng_mecanica'>Engenharia Mecânica</li>
              <li file='servicos/subterraneas'>Infraestruturas Subterrâneas</li>
            </ul>
          </li>

          <li><span>PROJETOS/CLIENTES</span>
            <ul class='submenu'>
              <li file='projetos/todos'>Todos os Projetos</li>
              <li file='projetos/principais'>Principais Clientes</li>
            </ul>
          </li>

          <li><span>CONTATO</span></li>
        </ul>
      </nav>

      <footer>
        <label>lalala direitos reservados</label>
      </footer>
    </aside>
    <div class='fake_header'></div>