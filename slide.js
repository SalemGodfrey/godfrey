// let round1 = document.querySelector('.round1')
// let round2 = document.querySelector('.round2')
// let round3 = document.querySelector('.round3')

function slide2() {
    document.querySelector('.slidesDiv').style = 'background-image: url("images/coding.jpg");  transition: all ease-in-out .2s;'
    document.querySelector('#round2').className = 'round2 roundActive'
    document.querySelector('#round1').className = 'round1'
    document.querySelector('#round3').className = 'round3'
    document.querySelector('.title2').innerHTML = 'WEB DESIGN'
    document.querySelector('.slidesText').innerHTML = "Web design is an exciting and challenging field where creativity meets technology. As a web developer, I strive to create websites that are both visually appealing and functional. My goal is to provide an intuitive and user-friendly experience for visitors, while also ensuring that the site is optimized for search engines. I believe that good web design requires attention to detail and  a strong understanding of user experience. "
}
function slide1() {
    document.querySelector('.slidesDiv').style = 'background-image: url("images/chloe.jpg");  transition: all ease-in-out .2s;'
    document.querySelector('#round2').className = 'round2'
    document.querySelector('#round1').className = 'round1 roundActive'
    document.querySelector('#round3').className = 'round3'
    document.querySelector('.title2').innerHTML = 'GAMEDEV'
    document.querySelector('.slidesText').innerHTML = "As an indie game developer, I am passionate about creating unique and engaging gaming experiences. With the freedom to experiment and explore different ideas, I enjoy pushing boundaries and creating games that stand out from the crowd. Working independently allows me to maintain creative control and stay true to my vision. While the journey can be challenging, the reward of seeing players enjoy my games makes it all worthwhile. "
}

function slide3() {
    document.querySelector('.slidesDiv').style = 'background-image: url("images/photoshop.png");  transition: all ease-in-out .2s;'
    document.querySelector('#round2').className = 'round2'
    document.querySelector('#round1').className = 'round1'
    document.querySelector('#round3').className = 'round3 roundActive'
    document.querySelector('.title2').innerHTML = 'PHOTOSHOP'
    document.querySelector('.slidesText').innerHTML = "As a designer, I am constantly exploring new creative avenues to bring my ideas to life through Photoshop. This versatile tool enables me to bring my imagination to reality with its powerful editing capabilities and vast array of features. From photo manipulation to graphic design, I am able to craft beautiful visuals that captivate and engage my audience. Photoshop is an essential tool that empowers my creative vision and helps me bring my designs to life."
}
