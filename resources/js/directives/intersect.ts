export default {
  mounted(el: HTMLElement) {
    el.classList.add('before-fade-up');

    const observer = new IntersectionObserver(
      ([entry]) => {
        if (entry.isIntersecting) {
          el.classList.add('animate-fade-up');
          el.classList.remove('before-fade-up');
        } else {
          el.classList.remove('animate-fade-up');
          el.classList.add('before-fade-up');
        }
      },
      {
        threshold: 0.1,
      }
    );

    observer.observe(el);
  },
};
