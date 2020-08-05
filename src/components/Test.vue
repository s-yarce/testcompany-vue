<template>
    <section class="bg-light" id="team">
      <div class="container">
        <div class="row">
          <div 
              v-for="proj in projects"
              :key="proj.id">
              <h1>{{ proj.title.rendered }}</h1>
              <h6>{{ proj.content.rendered }}</h6>
              <img :src="proj.better_featured_image.media_details.sizes.medium.source_url"/>
          </div>
        </div>
      </div>
    </section>
</template>

<script>
export default {
    data: () => ({
        projects: []
    }),
    created: function() {
    this.$http.get('wp/v2/projects').then(response => {
      for (const project in response.data) {
        this.projects.push(response.data[project])
      }
    }, error => { 
      alert(error) 
    })
  }
}
</script>
