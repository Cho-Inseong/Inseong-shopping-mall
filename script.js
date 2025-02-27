const id_and_pw_regex = (target) => {
    target.value = target.value.replace(/[^a-zA-Z0-9]/g, "");
}

const name_regex = (target) => {
    target.value = target.value.replace(/[^가-힣-ㄱ-ㅎ]+$/g, "");
}

function overlap() {
    const user_id_val = $("#id").val();

    $.post("./overlap", {
        user_id: user_id_val,
    }).done(function(data) {
        if (typeof data === "string") {
            try {
                data = JSON.parse(data);
            } catch (e) {
                alert("서버 응답 오류: JSON 변환 실패");
                console.error("JSON Parse Error:", e, data);
                return;
            }
        }
        alert(data.message);
        
        if (data.message === "이 아이디는 사용불가능합니다.") {
            location.reload();
        }
        
    }).fail(function() {
        alert("서버 요청 실패");
    })
};