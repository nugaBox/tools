<div class="page-header">
    <h1>
        DevLabs <small class="m-hidden">NUGABOX</small>
        <span class="float-right">
            <i class="fas fa-user-circle"></i>  <?=$_SESSION['user_name']?><button type="button" id="logout" class="btn btn-sm btn-dark" onclick="location.href='include/logout.php' "><i class="fas fa-sign-out-alt"></i> Log out</button>
        </span>
    </h1>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/"><img src="<?=$gs_imagesFolder?>J-Logo-Circle-TH.png" width="30" alt="nugaBox"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="./index.php">메인 <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">서명 만들기</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="javascript:showWorshipList('soo','10')">수영로 주일설교</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="javascript:showWorshipList('soo','06')">수영로 금요철야</a>
            </li>
        </ul>
    </div>
</nav>