(function () {
	const modalManager = {
		openButtons: document.querySelectorAll('.modal-open'),
		closeButtons: document.querySelectorAll('.modal-close'),
		activeClass: 'is-active',
		openModal: function (modalId) {
			const overlay = document.getElementById(`${modalId}-overlay`);
			if (!overlay) return;

			overlay.classList.add(this.activeClass);
			document.body.style.overflow = 'hidden';

			const modal = document.getElementById(modalId);
			const title = modal.querySelector('h2');
			if (title) {
				title.setAttribute('tabindex', '-1');
				title.focus();
			}

			this.currentOverlay = overlay;
		},
		closeModal: function () {
			if (this.currentOverlay) {
				this.currentOverlay.classList.remove(this.activeClass);
				document.body.style.overflow = '';
			}
		},
		init: function () {
			this.openButtons.forEach(button => {
				button.addEventListener('click', (e) => {
					e.preventDefault();
					const modalId = button.getAttribute('data-modal');
					this.openModal(modalId);
				});
			});

			this.closeButtons.forEach(button => {
				button.addEventListener('click', (e) => {
					e.preventDefault();
					this.closeModal();
				});
			});

			document.addEventListener('keydown', (e) => {
				if (e.key === 'Escape') {
					this.closeModal();
				}
			});

			document.querySelectorAll('.modal-overlay').forEach(overlay => {
				overlay.addEventListener('click', (e) => {
					if (e.target.classList.contains('modal-overlay')) {
						this.closeModal();
					}
				});
			});
		}
	};

	document.addEventListener('DOMContentLoaded', () => modalManager.init());
})();





