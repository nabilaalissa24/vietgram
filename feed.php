<?php
    session_start();
    include "koneksi.php";

    /*$photo = mysqli_query($koneksi,"SELECT * from photo");*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feed | Vietgram</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navigation">
        <div class="navigation__column">
            <a href="feed.php">
                <!-- Master branch comment -->
                <img src="images/logo.png" />
            </a>
        </div>
        <div class="navigation__column">
            <i class="fa fa-search"></i>
            <input type="text" placeholder="Search" id="search">
        </div>
        <div class="navigation__column">
            <ul class="navigations__links">
                <li class="navigation__list-item">
                    <a href="explore.php" class="navigation__link">
                        <i class="fa fa-compass fa-lg"></i>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="upload.php" class="navigation__link">
                        <i class="fa fa-heart-o fa-lg"></i>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="profile.php" class="navigation__link">
                        <i class="fa fa-user-o fa-lg"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <main id="feed">
        <div class="photo">
            <header class="photo__header">
                <img src="images/avatar.jpg" class="photo__avatar" />
                <div class="photo__user-info">
                    <span class="photo__author">Nabila Alissa</span>
                    <span class="photo__location">Surabaya</span>
                </div>
            </header>
            <img src="images/feedPhoto1.jpg" />
            <div class="photo__info">
                <div class="photo__actions">
                    <span class="photo__action">
                        <i class="fa fa-heart-o fa-lg"></i>
                    </span>
                    <span class="photo__action">
                        <i class="fa fa-comment-o fa-lg"></i>
                    </span>
                </div>
                <span class="photo__likes">9.822 likes</span>
                <ul class="photo__comments">
                    <li class="photo__comment">
                        <span class="photo__comment-author">Nab</span> love this!
                    </li>
                    <li class="photo__comment">
                        <span class="photo__comment-author">Yoey</span> yoi, keren bet
                    </li>
                    <li class="photo__comment">
                        <span class="photo__comment-author">Alifia</span> euy, pa kabar
                    </li>
                    <li class="photo__comment">
                        <span class="photo__comment-author">Putri</span> duarr
                    </li>
                </ul>
                <span class="photo__time-ago">1 hours ago</span>
                <div class="photo__add-comment-container">
                    <textarea name="comment" placeholder="Add a comment..."></textarea>
                    <i class="fa fa-ellipsis-h"></i>
                </div>
            </div>
        </div>
        <div class="photo">
            <header class="photo__header">
                <img src="images/avatar.jpg" class="photo__avatar" />
                <div class="photo__user-info">
                    <span class="photo__author">Nabila Alissa</span>
                    <span class="photo__location">Malang</span>
                </div>
            </header>
            <img src="images/feedPhoto2.jpg" />
            <div class="photo__info">
                <div class="photo__actions">
                    <span class="photo__action">
                            <i class="fa fa-heart-o fa-lg"></i>
                        </span>
                    <span class="photo__action">
                            <i class="fa fa-comment-o fa-lg"></i>
                        </span>
                </div>
                <span class="photo__likes">10.822 likes</span>
                <ul class="photo__comments">
                    <li class="photo__comment">
                        <span class="photo__comment-author">Nabila</span> nais
                    </li>
                    <li class="photo__comment">
                        <span class="photo__comment-author">Alissa</span> keren abis
                    </li>
                    <li class="photo__comment">
                        <span class="photo__comment-author">Duar</span> apa kabar euy
                    </li>
                    <li class="photo__comment">
                        <span class="photo__comment-author">Yoey</span> duss
                    </li>
                </ul>
                <span class="photo__time-ago">6 hours ago</span>
                <div class="photo__add-comment-container">
                    <textarea name="comment" placeholder="Add a comment..."></textarea>
                    <i class="fa fa-ellipsis-h"></i>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="footer__column">
            <nav class="footer__nav">
                <ul class="footer__list">
                    <li class="footer_list-item"><a href="#" class="footer_link">About Us</a></li>
                    <li class="footer_list-item"><a href="#" class="footer_link">Support</a></li>
                    <li class="footer_list-item"><a href="#" class="footer_link">Blog</a></li>
                    <li class="footer_list-item"><a href="#" class="footer_link">Press</a></li>
                    <li class="footer_list-item"><a href="#" class="footer_link">Api</a></li>
                    <li class="footer_list-item"><a href="#" class="footer_link">Jobs</a></li>
                    <li class="footer_list-item"><a href="#" class="footer_link">Privacy</a></li>
                    <li class="footer_list-item"><a href="#" class="footer_link">Terms</a></li>
                    <li class="footer_list-item"><a href="#" class="footer_link">Directory</a></li>
                    <li class="footer_list-item"><a href="logout.php" class="footer_link">LOGOUT</a></li>
                </ul>
            </nav>
        </div>
        <div class="footer__column">
            <span class="footer__copyright">© 2020 Vietgram by Nab</span>
        </div>
    </footer>
    <script>
                $(document).ready(function(){
                    $('#search').keyup(function(){
                        var text = $(this).val();
                        $('.photo').hide();
                        $('.photo').each(function(){
    
                            if($(this).text().toLowerCase().indexOf(""+text+"") != -1 ){
                                $(this).closest('.photo').show();
                            }
                        });
                    });   
                });
    </script>
</body>

</html>