<template>
  <div>
    <h1 class="font-normal text-3xl text-grey-darkest leading-none">Your Achievements</h1>
    <ul class="my-8">
      <li
        v-for="achievement in achievements"
        v-text="achievement.name"
      ></li>
    </ul>
  </div>
</template>

<script>
export default {
  data() {
    return {
      achievements: []
    };
  },

  created() {
    axios 
      .get("http://laravel.test:8000/api/achievements")
      .then(response => response.data)
      .then(data => {
        this.achievements = data;
      });
  }
};
</script>
