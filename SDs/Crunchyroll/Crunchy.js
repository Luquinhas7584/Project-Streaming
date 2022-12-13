let left_btn = document.getElementsByClassName('bi-chevron-left')[0];
let right_btn = document.getElementsByClassName('bi-chevron-right')[0];
let cards = document.getElementsByClassName('cards')[0];

left_btn.addEventListener('click', () => {
    cards.scrollLeft -= 140;
})
right_btn.addEventListener('click', () => {
    cards.scrollLeft += 140;
})

let json_url = "Crunchy.json";

fetch(json_url).then(Response => Response.json())
    .then((data) => {
        data.forEach((ele, i) => {
            let { nome, LVL, data, sposter, bposter, genero, url } = ele;
            let card = document.createElement('a');
            card.classList.add('card');
            card.href = url;
            card.innerHTML = `
            <img src="${sposter}" alt="${nome}" class="poster"> 
                    <div class="rest_card">
                        <img src="${bposter}" alt="">
                        <div class="cont">
                            <h4>${nome}</h4>
                            <h4> <?php ?> </h4>
                            <div class="sub">
                                <p>${genero}, ${data}</p>
                                <h3><span>LVL</span><i class="bi bi-star-fill"> ${LVL}</i></h3>
                            </div>
                        </div>
                    </div>
                    `
            cards.appendChild(card);

        });
    });