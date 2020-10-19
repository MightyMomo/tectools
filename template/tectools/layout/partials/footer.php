<?phpdeclare(strict_types=1);/** * @var RCMS $this */?><footer id="footer" class="page-footer">    <div class="container">        <div class="row">            <div class="col l6 s12">                <h5 class="white-text">TecTools</h5>                <p class="grey-text text-lighten-4">Udlejning af værktøj</p>                <div class="toggle-box" onclick="this.querySelector('#dark-theme-input').click()">                    <p style="margin-bottom: 0">Tema</p> <input type="checkbox" name="checkbox1" id="dark-theme-input" />                    <label for="toggle-box-checkbox" class="toggle-box-label-left"></label>                    <label for="toggle-box-checkbox" class="toggle-box-label"></label>                </div>                <style>                    .toggle-box {                        display: inline-block;                    }                    .toggle-box-label-left:empty {                        margin-left: -10px;                    }                    .toggle-box-label-left:before, .toggle-box-label-left:after {                        box-sizing: border-box;                        margin: 0;                        padding: 0;                        -webkit-transition: .25s ease-in-out;                        -moz-transition: .25s ease-in-out;                        -o-transition: .25s ease-in-out;                        transition: .25s ease-in-out;                        outline: none;                    }                    .toggle-box input[type=checkbox], .toggle-box input[type=checkbox]:active {                        position: absolute;                        top: -5000px;                        height: 0;                        width: 0;                        opacity: 0;                        border: none;                        outline: none;                    }                    .toggle-box label {                        display: inline-block;                        position: relative;                        padding: 0px;                        margin-bottom: 20px;                        font-size: 14px;                        line-height: 16px;                        cursor: pointer;                        color: rgba(149,149,149,0.51);                        font-weight: normal;                    }                    .toggle-box-label-left:before {                        content: '';                        display: block;                        position: absolute;                        z-index: 1;                        line-height: 34px;                        text-indent: 40px;                        height: 16px;                        width: 16px;                        margin: 4px;                        -webkit-border-radius: 100%;                        -moz-border-radius: 100%;                        border-radius: 100%;                        right: 26px;                        bottom: 0px;                        background: #FFB200;                        transform: rotate(-45deg);                        box-shadow: 0 0 10px white;                    }                    .toggle-box-label-left:after {                        content: "";                        display: inline-block;                        width: 40px;                        height: 24px;                        -webkit-border-radius: 16px;                        -moz-border-radius: 16px;                        border-radius: 16px;                        background: rgba(255,255,255,0.15);                        vertical-align: middle;                        margin: 0 10px;                        border: 2px solid #FFB200;                    }                    .toggle-box input[type=checkbox]:checked + .toggle-box-label-left:before {                        right: 17px;                        box-shadow: 5px 5px 0 0 #eee;                        background: transparent;                    }                    .toggle-box input[type=checkbox]:checked + .toggle-box-label-left:after {                        background: rgba(0,0,0,0.15);                        border: 2px solid white;                    }                    .toggle-box input[type=checkbox] + .toggle-box-label-left {                        color: rgba(250,250,250,0.51);                        font-weight: bold;                    }                    .toggle-box input[type=checkbox]:checked + .toggle-box-label-left {                        color: rgba(149,149,149,0.51);                        font-weight: normal;                    }                    .toggle-box input[type=checkbox]:checked + .toggle-box-label-left + .toggle-box-label {                        color: rgba(250,250,250,0.51);                        font-weight: bold;                    }                </style>            </div>            <div class="col l3 s12">                <h5 class="white-text">Links</h5>                <ul>                    <li><a class="white-text" target="_blank" href="">Kontakt</a></li>                    <li><a class="white-text" target="_blank" href="">Om TecTools</a></li>                </ul>            </div>            <div class="col l3 s12">                <h5 class="white-text">Links</h5>                <ul>                    <?php if (!$this->Login->isLoggedIn()): ?>                        <li>                            <a class="white-text" href="<?= $this->getHomeFolder() ?>register">Opret</a>                        </li>                        <li>                            <a class="white-text" href="<?= $this->getHomeFolder() ?>login">Log ind</a>                        </li>                    <?php endif; ?>                    <?php if ($this->Login->isLoggedIn()): ?>                        <li>                            <a class="white-text" href="<?= $this->getHomeFolder() ?>dashboard">Dashboard</a>                        </li>                        <li>                            <a class="white-text" href="<?= $this->getHomeFolder() ?>scan">Scan</a>                        </li>                        <li>                            <a class="white-text" href="?log_out=1">Log ud</a>                        </li>                    <?php endif; ?>                </ul>            </div>        </div>    </div>    <div class="footer-copyright">        <div class="container">            <a class="white-text" target="_blank" href="https://tectools.virtusb.com">tectools.virtusb.com</a>            <p style="margin: 0" class="right">                <a class="white-text" target="_blank" href="https://github.com/MightyMomo">Morten</a>                -                <a class="white-text" target="_blank" href="https://github.com/VirtusB">Virtus</a>            </p>        </div>    </div></footer>