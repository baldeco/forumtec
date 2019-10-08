<?php /* Smarty version 2.6.1, created on 2019-10-07 22:28:48
         compiled from menu_lateral.htm */ ?>
<div class="page-sidebar sidebar">
  <div class="page-sidebar-inner slimscroll">
    <ul class="menu accordion-menu">
      <li class="active">
        <a href="?secao=dashboard&modulo=home" class="waves-effect waves-button">
          <span class="menu-icon glyphicon glyphicon-home"></span> Dashboard
        </a>
      </li>
      <li class="droplink <?php if ($this->_tpl_vars['secao'] == 'cadastro'): ?>active open<?php endif; ?>">
        <a href="#" class="waves-effect waves-button">
          <span class="menu-icon glyphicon glyphicon-briefcase"></span> Cadastros<span class="arrow"></span>
        </a>
        <ul class="sub-menu active open">
          <li<?php if ($this->_tpl_vars['modulo'] == 'palestra'): ?> class="active"<?php endif; ?>><a href="?secao=cadastro&modulo=palestra">Palestras</a></li>
          <li<?php if ($this->_tpl_vars['modulo'] == 'autor'): ?> class="active"<?php endif; ?>><a href="?secao=cadastro&modulo=autor">Autores</a></li>
          <li<?php if ($this->_tpl_vars['modulo'] == 'participante'): ?> class="active"<?php endif; ?>><a href="?secao=cadastro&modulo=participante">Participantes</a></li>
          <li<?php if ($this->_tpl_vars['modulo'] == 'oficina'): ?> class="active"<?php endif; ?>><a href="?secao=cadastro&modulo=oficina">Oficinas</a></li>
          <li<?php if ($this->_tpl_vars['modulo'] == 'palestrante'): ?> class="active"<?php endif; ?>><a href="?secao=cadastro&modulo=palestrante">Palestrantes</a></li>
          <li<?php if ($this->_tpl_vars['modulo'] == 'patrocinador'): ?> class="active"<?php endif; ?>><a href="?secao=cadastro&modulo=patrocinador">Patrocinadores</a></li>
          <li<?php if ($this->_tpl_vars['modulo'] == 'noticia'): ?> class="active"<?php endif; ?>><a href="?secao=cadastro&modulo=noticia">Noticias</a></li>
          <li<?php if ($this->_tpl_vars['modulo'] == 'instituicao'): ?> class="active"<?php endif; ?>><a href="?secao=cadastro&modulo=instituicao">Insituições</a></li>
          <li<?php if ($this->_tpl_vars['modulo'] == 'local'): ?> class="active"<?php endif; ?>><a href="?secao=cadastro&modulo=local">Locais</a></li>
          <li<?php if ($this->_tpl_vars['modulo'] == 'banner'): ?> class="active"<?php endif; ?>><a href="?secao=cadastro&modulo=banner">Banners</a></li>
          <li<?php if ($this->_tpl_vars['modulo'] == 'usuario'): ?> class="active"<?php endif; ?>><a href="?secao=cadastro&modulo=usuario">Usuários</a></li>
        </ul>
      </li>
      <li class="droplink <?php if ($this->_tpl_vars['secao'] == 'relatorio'): ?>active open<?php endif; ?>">
        <a href="#" class="waves-effect waves-button">
          <span class="menu-icon glyphicon glyphicon-list-alt"></span> Relatorio<span class="arrow"></span>
        </a>
        <ul class="sub-menu active open">
          <li<?php if ($this->_tpl_vars['modulo'] == 'palestra'): ?> class="active"<?php endif; ?>><a href="?secao=relatorio&modulo=palestra">Palestras</a></li>
          <li<?php if ($this->_tpl_vars['modulo'] == 'oficina'): ?> class="active"<?php endif; ?>><a href="?secao=relatorio&modulo=oficina">Oficinas</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>