<?phpdeclare(strict_types=1);/** * @var RCMS $this */?><nav id="header" role="navigation">    <div class="nav-wrapper container">        <!-- Burger icon mobile trigger -->        <a href="#" data-target="mobile-menu" class="sidenav-trigger"><i class="material-icons">menu</i></a>        <a style="min-width: fit-content;" href="<?= $this->getHomeFolder() ?>" class="brand-logo center"><i class="fal fa-toolbox"></i> <?= SITE_NAME ?></a>        <!-- Login button with icon -->        <ul class="right hide-on-med-and-down">            <?php if (!$this->Login->isLoggedIn()): ?>                <li>                    <a href="<?= $this->getHomeFolder() ?>register">Opret</a>                </li>                <li>                    <a href="<?= $this->getHomeFolder() ?>login">Log ind</a>                </li>            <?php endif; ?>            <?php if ($this->Login->isLoggedIn()): ?>                <li>                    <a href="<?= $this->getHomeFolder() ?>dashboard">Dashboard <i class="material-icons right">settings</i></a>                </li>                <li>                    <a href="<?= $this->getHomeFolder() ?>scan">Scan <i class="fal fa-scanner right"></i></a>                </li>                <li>                    <a href="?log_out=1">Log ud</a>                </li>            <?php endif; ?>        </ul>    </div></nav><!-- Mobile sidenav --><ul class="sidenav" id="mobile-menu">    <?php if (!$this->Login->isLoggedIn()): ?>        <li>            <a href="<?= $this->getHomeFolder() ?>register">Opret</a>        </li>        <li>            <a href="<?= $this->getHomeFolder() ?>login">Log ind</a>        </li>    <?php endif; ?>    <?php if ($this->Login->isLoggedIn()): ?>        <li>            <a href="<?= $this->getHomeFolder() ?>dashboard">Dashboard <i class="material-icons right">settings</i></a>        </li>        <li>            <a href="<?= $this->getHomeFolder() ?>scan">Scan <i class="fal fa-scanner right"></i></a>        </li>        <li>            <a href="?log_out=1">Log ud</a>        </li>    <?php endif; ?></ul>