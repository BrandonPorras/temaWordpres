window.onload = function () {
    var ele = document.getElementById("hamb");
    var sqa = document.getElementById("blank")
    ele.onclick = function() {
        if(sqa.className === "square-NonActive") {
            sqa.className = "square-Active";
        } else {
            sqa.className = "square-NonActive";
        }
    };
};