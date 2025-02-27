<main id="container">
    <div id="wrapped">
        <div class="sign_up_area">
            <div class="sign_up_logo_back">
                <img class="sign_up_logo" src="../IMG/logo.png" alt="">
            </div>
            <div class="sign_up_form">
                <p class="sign_up_p">이름</p>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="name" aria-label="Sizing example input" oninput="name_regex(this)" aria-describedby="inputGroup-sizing-default">
                </div>
                <p class="sign_up_p">아이디</p>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="id" aria-label="Sizing example input" oninput="id_and_pw_regex(this)" aria-describedby="inputGroup-sizing-default">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2" onclick="overlap()">중복검사</button>
                </div>
                <p class="sign_up_p">이메일</p>
                <div class="input-group mb-3">
                    <input type="email" class="form-control" id="email" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <p class="sign_up_p">비밀번호</p>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" id="password" aria-label="Sizing example input" oninput="id_and_pw_regex(this)" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-3">
                    <img class="captcha_logo" src="../IMG/captcha.png" alt="">
                    <input type="text" class="form-control" id="captcha" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <button id="sign_up_submit" type="button" class="btn btn-myblue" onclick="sign_up()" disabled>회원가입</button>
            </div>
        </div>
    </div>
</main>