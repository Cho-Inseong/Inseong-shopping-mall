// 정규표현식식
const id_and_pw_regex = (target) => {
    target.value = target.value.replace(/[^a-zA-Z0-9]/g, "");
}

const name_regex = (target) => {
    target.value = target.value.replace(/[^가-힣-ㄱ-ㅎ]+$/g, "");
}
// 아이디 중복검사사
function overlap() {
    const user_id_val = $("#id").val();

    $.post("./overlap", {
        user_id: user_id_val,
    }).done(function(data) {
        if (typeof data === "string") {
            try {
                data = JSON.parse(data); //자바스크립트 객체로 변환
            } catch (e) {
                alert("서버 응답 오류: JSON 변환 실패");
                console.error("JSON Parse Error:", e, data);
                return;
            }
        }

        if (data.available) {
            alert(data.message);
            $("#sign_up_submit").prop("disabled", false);
        } else {
            alert(data.message);
            location.reload();
        }

    }).fail(function() {
        alert("서버 요청 실패");
    })
};
// 회원가입
function sign_up() {
    const user_name_val = $("#name").val();
    const user_id_val = $("#id").val();
    const user_email_val = $("#email").val();
    const user_pw_val = $("#password").val();
    const captcha_val = $("#captcha").val();

    $.post("./sign_up_api", {
        user_name: user_name_val,
        user_id: user_id_val,
        user_email: user_email_val,
        user_pw: user_pw_val,
        captcha: captcha_val,
    }).done(function(data) {
        if(typeof data === "string") {
            try {
                data = JSON.parse(data);
            } catch (e) {
                alert("서버 응답 오류: JSON 변환 실패");
                console.error("JSON Parse Error:" , e, data);
                return
            }
        }

        if(data.success) {
            alert(data.message);
            location.href = "./";
        } else if (data.message === "데이터베이스 오류 발생") {
            console.error(data.error);
            alert(data.message);
        } else if (data.message === "캡챠인증이 잘못됨") {
            alert(data.message);
            location.reload();
        }
        
    }).fail(function() {
        alert("서버 요청 실패");
    })
}