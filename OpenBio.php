<?php include_once 'Components/Header.php'; ?>
    <link href="Assets/style/openbio.css" rel="stylesheet">
</head>
<body>
    <?php include_once 'Components/Menu.php'; ?>

    <div class="openbio-wrapper">
        <div class="openbio-search">
            <img src="Assets/Images/Main/openbio-logo.png" class="search-openbio-logo" title="gongdori's open bioinformatics project, openbio">
            <form action="OpenBioSearch.php" method="get">
                <button type="submit" title="Openbio search">
                    <svg version="1.1" class="search-icon" xmlns="http://www.w3.org/2000/svg" width="20pt" height="20pt" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 52.966 52.966" style="enable-background:new 0 0 52.966 52.966;" xml:space="preserve" class="search-icon">
                        <path d="M51.704,51.273L36.845,35.82c3.79-3.801,6.138-9.041,6.138-14.82c0-11.58-9.42-21-21-21s-21,9.42-21,21s9.42,21,21,21
                            c5.083,0,9.748-1.817,13.384-4.832l14.895,15.491c0.196,0.205,0.458,0.307,0.721,0.307c0.25,0,0.499-0.093,0.693-0.279
                            C52.074,52.304,52.086,51.671,51.704,51.273z M21.983,40c-10.477,0-19-8.523-19-19s8.523-19,19-19s19,8.523,19,19
                            S32.459,40,21.983,40z"/>
                    </svg>
                </button>
                <input type="text" class="tmenu-search" name="query" placeholder="Search Paper, Protein, DNA, ... etc." require>
                <input type="hidden" name="offset" value="0">
                <input type="hidden" name="limit" value="25">
                <input type="hidden" name="format" value="tab">
                <input type="hidden" name="filter" value="a">
            </form>
        </div>
    </div>
</body>
</html>