window.carousel = function() {
  return {
    container: null,
    prev: null,
    next: null,
    init() {
      this.container = this.$refs.container

      this.update();

      this.container.addEventListener('scroll', this.update.bind(this), {
        passive: true
      });
    },
    update() {
      const rect = this.container.getBoundingClientRect();

      const visibleElements = Array.from(this.container.children).filter((child) => {
        const childRect = child.getBoundingClientRect()

        return childRect.left >= rect.left && childRect.right <= rect.right;
      });

      if (visibleElements.length > 0) {
        this.prev = this.getPrevElement(visibleElements);
        this.next = this.getNextElement(visibleElements);
      }
    },
    getPrevElement(list) {
      const sibling = list[0].previousElementSibling;

      if (sibling instanceof HTMLElement) {
        return sibling;
      }

      return null;
    },
    getNextElement(list) {
      const sibling = list[list.length - 1].nextElementSibling;

      if (sibling instanceof HTMLElement) {
        return sibling;
      }

      return null;
    },
    scrollTo(element) {
      const current = this.container;

      if (!current || !element) return;

      const nextScrollPosition =
        element.offsetLeft +
        element.getBoundingClientRect().width / 2 -
        current.getBoundingClientRect().width / 2;

      current.scroll({
        left: nextScrollPosition,
        behavior: 'smooth',
      });
    }
  };
}

