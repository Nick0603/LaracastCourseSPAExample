<template>
  <div>
    <h1 class="font-normal mb-6 text-3xl text-grey-darkest leading-none">Your Achievements</h1>
    <input
      class="border p-2 rounded w-full"
      placeholder="Your Laracasts API Token"
      type="text"
      v-model="token"
      @keyup.enter="fetchAchievements"
    />
    <p class="text-red-500 italic text-sm" v-if="message" v-text="message"></p>
    <ul class="my-8">
      <li v-for="achievement in achievements" v-text="achievement.name"></li>
    </ul>
  </div>
</template>

<script>
export default {
  data() {
    return {
      achievements: [],
      token: ""
    };
  },

  methods: {
    fetchAchievements() {
      axios
        .get(
          `http://laravel.test:8000/api/achievements?api_token=${this.token}`
        )
        .catch(error => {
          this.message = error.response.data.message;
          this.achievements = [];
        })
        .then(({data}) => {
          this.message = null;
          this.achievements = data
        });  
    }
  }
};
</script>
