$(document).ready(function () {

    // Slider
    $('.bxslider').bxSlider({
        mode: 'fade',
        auto: true,
        slideWidth: 1200,
        speed: 2000,
        controls: false,
        pager: false
    });

    // Posts
    var posts = [
        {
            title: 'Prueba de titulo 1',
            date: "Publicado el día " + moment().date() + " de " + moment().format("MMMM") + " de " + moment().format("YYYY"),
            content: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur sit deserunt non amet sint illum aliquid, cumque unde vel dicta reprehenderit omnis ipsum quaerat sunt ad magnam architecto, accusamus quae et doloribus nam. Consectetur unde ipsa dignissimos quae assumenda minima voluptate. Expedita officiis quod, numquam dignissimos doloremque inventore cumque laborum.'
        },
        {
            title: 'Prueba de titulo 2',
            date: "Publicado el día " + moment().date() + " de " + moment().format("MMMM") + " de " + moment().format("YYYY"),
            content: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur sit deserunt non amet sint illum aliquid, cumque unde vel dicta reprehenderit omnis ipsum quaerat sunt ad magnam architecto, accusamus quae et doloribus nam. Consectetur unde ipsa dignissimos quae assumenda minima voluptate. Expedita officiis quod, numquam dignissimos doloremque inventore cumque laborum.'
        },
        {
            title: 'Prueba de titulo 3',
            date: "Publicado el día " + moment().date() + " de " + moment().format("MMMM") + " de " + moment().format("YYYY"),
            content: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur sit deserunt non amet sint illum aliquid, cumque unde vel dicta reprehenderit omnis ipsum quaerat sunt ad magnam architecto, accusamus quae et doloribus nam. Consectetur unde ipsa dignissimos quae assumenda minima voluptate. Expedita officiis quod, numquam dignissimos doloremque inventore cumque laborum.'
        },
        {
            title: 'Prueba de titulo 4',
            date: "Publicado el día " + moment().date() + " de " + moment().format("MMMM") + " de " + moment().format("YYYY"),
            content: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur sit deserunt non amet sint illum aliquid, cumque unde vel dicta reprehenderit omnis ipsum quaerat sunt ad magnam architecto, accusamus quae et doloribus nam. Consectetur unde ipsa dignissimos quae assumenda minima voluptate. Expedita officiis quod, numquam dignissimos doloremque inventore cumque laborum.'
        },
        {
            title: 'Prueba de titulo 5',
            date: "Publicado el día " + moment().date() + " de " + moment().format("MMMM") + " de " + moment().format("YYYY"),
            content: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur sit deserunt non amet sint illum aliquid, cumque unde vel dicta reprehenderit omnis ipsum quaerat sunt ad magnam architecto, accusamus quae et doloribus nam. Consectetur unde ipsa dignissimos quae assumenda minima voluptate. Expedita officiis quod, numquam dignissimos doloremque inventore cumque laborum.'
        },
    ]

    posts.forEach((item) => {
        var post = `
            <article class="post">
                <h2>${item.title}</h2>
                <span class="date">${item.date}</span>
                <p>${item.content}</p>
                <a class="button-more" href="#">Leer mas</a>
            </article>        
        `;

        $("#posts").append(post);
    });
});