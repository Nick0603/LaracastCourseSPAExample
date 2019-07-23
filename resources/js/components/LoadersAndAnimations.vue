<template>
  <div>
    <h1 class="font-normal  text-3xl text-grey-darkest leading-none ">Loaders And Animations</h1>
    <p class="my-10 test-grey-darker leading-normal">
      This spinner uses AirBnb's
      <a href="http://airbnb.io/lottie/#/web" class="text-blue font-bold"></a>
      library to render its animation. You may download the necessary assets below.
    </p>
    <div class="border border-grey-lighter rounded-lg flex items-center justify-center mb-8">
      <div ref="lottie" class="w-64" style="height: 457px"></div>
    </div>
    <a
      class="border border-grey-light px-10 py-2 rounded-full text-sm text-black font-bold"
      target="_blank"
      href="/animations/spinner.zip"
    >spinner.zip</a>
  </div>
</template>

<script>
import lottie from 'lottie-web';
export default {
  mounted(){
    lottie.loadAnimation({
      container: this.$refs.lottie,
      renderer: 'svg',
      loop: true,
      autoplay: true,
      path: 'animations/spinner.json'
    })
  }
};
</script>
