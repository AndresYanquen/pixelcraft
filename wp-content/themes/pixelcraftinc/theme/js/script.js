document.addEventListener("alpine:init", () => {
  Alpine.data("imageSlider", () => ({
    currentIndex: 1,
    images: [
      "https://unsplash.it/640/425?image=30",
      "https://unsplash.it/640/425?image=40",
      "https://unsplash.it/640/425?image=50",
    ],
    previous() {
      if (this.currentIndex > 1) {
        this.currentIndex = this.currentIndex - 1;
      }
    },
    forward() {
      if (this.currentIndex < this.images.length) {
        this.currentIndex = this.currentIndex + 1;
      }
    },
  }));
});


console.log('test');