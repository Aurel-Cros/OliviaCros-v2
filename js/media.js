let videoBlock = document.getElementById("yt")
let audioBlock = document.getElementById("audio")
let links = document.getElementById("mediaLinks")

links.addEventListener("click", (elem) => {
    let name = elem.target.getAttribute("name")
    if (name == "video") {
        videoBlock.setAttribute("class", "mediaDisplay")
        audioBlock.setAttribute("class", "mediaHide")
        console.log("Video clicked")
    }
    if (name == "audio") {
        videoBlock.setAttribute("class", "mediaHide")
        audioBlock.setAttribute("class", "mediaDisplay")
        console.log("Audio clicked")
    }
})