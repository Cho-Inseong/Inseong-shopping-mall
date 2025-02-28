<main id="container">
    <div id="wrapped">
        <div class="sign_in_area">
            <div class="sign_up_logo_back">
                <img class="sign_up_logo" src="../IMG/logo.png" alt="">
            </div>
            <div class="sign_up_form">
                <p class="sign_up_p">아이디</p>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="sign_in_id" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <p class="sign_up_p">비밀번호</p>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" id="sign_in_password" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="tier_radio" id="일반회원" value="일반회원">
                        <label class="form-check-label" for="tier_radio">
                            일반회원
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="tier_radio" id="담당자" value="담당자">
                        <label class="form-check-label" for="tier_radio">
                            담당자
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="tier_radio" id="관리자" value="관리자">
                        <label class="form-check-label" for="tier_radio">
                            관리자
                        </label>
                    </div>
                </div>
                <button id="sign_up_submit" type="button" class="btn btn-myblue" onclick="sign_in()">로그인</button>
            </div>
        </div>
    </div>
</main>