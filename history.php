<!doctype html>
<html lang="en">

<head>
    <?php
    $page = "history";
    include "htmlhead.php";
    ?>
</head>

<body>
    <div class="container bg-light p-2 my-2">

        <?php
        include "pageheader.php";
        include "navbar.php";
        ?>
        <div class="row my-2 p-3">
            <div class="col-md-6">

                <div class="embed-responsive ">
                    <iframe width="80%" height="250px" src="https://www.youtube.com/embed/ysqiEC6bLUI"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen class="d-block m-auto"></iframe>
                </div>
            </div>
            <div class="col-md-6">
                <h3>Riot Games inc.</h3>
                <hr>
                <p>
                Riot Games เป็นบริษัทผู้พัฒนาและเผยแพร่เกมที่มีชื่อเสียงในวงการเกมออนไลน์ โดยก่อตั้งขึ้นในปี 2006 
                โดย Brandon Beck และ Marc Merrill ในเมือง Los Angeles, California, สหรัฐอเมริกา 
                บริษัทนี้เป็นที่รู้จักดีที่สุดจากการสร้างและพัฒนาเกมแนว MOBA (Multiplayer Online Battle Arena) 
                ที่มีชื่อว่า League of Legends ซึ่งเปิดตัวในปี 2009 และกลายเป็นหนึ่งในเกมที่มีผู้เล่นมากที่สุดในโลก </p>
                <p>
                นอกจากนี้ ยังเน้นการพัฒนาเกมที่ให้ความสำคัญกับการแข่งขันและการสนับสนุน eSports ซึ่งทำให้ Riot Games 
                เป็นที่รู้จักในวงการเกมอย่างกว้างขวาง และก้าวเข้าสู่โลกแห่งความสนุกที่ไม่มีที่สิ้นสุด!</p>
            </div>

        </div>
        <div class="row my-2 p-3">
            <div class="col-md-6">
                <img src="images/lol.png" class="img-fluid img-thumbnail mx-auto d-block my-2" alt="" width="80%">
            </div>
            <div class="col-md-6">
                <h3>ผลงานสำคัญ</h3>
                <hr>
                <p>League of Legends</p>
                <p>Legends of Runeterra</p>
                <p>Teamfight Tactics </p>
                <p>Wild Rift</p>
                <p>Valorant</p>
                <p>Arcane </p>
            </div>
        </div>

        <?php
        include "footer.php";
        ?>

    </div>


</body>

</html>