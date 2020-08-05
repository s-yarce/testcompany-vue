<template>
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <p class="section-heading text-muted text-uppercase">Showcasing our adventures</p>
            <h1 class="section-subheading text-uppercase" style="color:#0DB7C4">Portfolio</h1>
            <br/>
            <h5 class="section-heading text-muted">Lorem ipsum dolor sit amet consectetur t consectetur, adipisicing elit. Nesciunt eos </h5>
            <br/>
          </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 portfolio-item" v-for="(obj, key) in portfolioJSON" :key="key">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <br/><br/>
                </a>
                <div class="portfolio-caption">
                    <h4>{{ obj.caption }}</h4>
                    <p class="text-muted">{{ obj.title }}</p>
                </div>
            </div>
        </div>
      </div>
    </section>
</template>

<script>
export default {
    data: () => ({
        portfolioJSON: [
            {
                img: '.../assets/img/explore.jpg',
                caption: 'Explore',
                title: 'Explore'
            },
            {
                img: '.../assets/img/finish.jpg',
                caption: 'Finish',
                title: 'Finish'
            },
            {
                img: '.../assets/img/lines.jpg',
                caption: 'Lines',
                title: 'Lines'
            },
            {
                img: '.../assets/img/southwest.jpg',
                caption: 'Southwest',
                title: 'Southwest'
            },
            {
                img: '.../assets/img/window.jpg',
                caption: 'Window',
                title: 'Window'
            },
            {
                img: '.../assets/img/coffee.jpg',
                caption: 'Coffee',
                title: 'Coffee' 
            }
        ]
    })
}
</script>
