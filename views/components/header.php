<header>
    <a href="./"><img src="./IMG/logo.png" alt=""></a>
    <ul>
        <?php
        if(isset($_SESSION['user_idx'])) {
            echo $_SESSION['user_id'];
            echo "<---->";
            echo $_SESSION['user_tier'];
        }
        ?>
        <input type="text" placeholder="검색어를 입력해주세요" class="serch_input">
        <?php
        if(isset($_SESSION['user_idx'])) {
            echo "
            <li><a class='header_link_a' href='logout_api'>로그아웃</a></li>
            <li><a class='header_link_a' href='#'>장바구니</a></li>
            <li><a class='header_link_a' href='mypage'>마이페이지</a></li>
            ";
        }else {
            echo "
            <li><a class='header_link_a' href='sign_in'>로그인</a></li>
            <li><a class='header_link_a' href='sign_up'>회원가입</a></li>
            <li><a class='header_link_a' href='#'>장바구니</a></li>
            ";
        }
        ?>
    </ul>
</header>