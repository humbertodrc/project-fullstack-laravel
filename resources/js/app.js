import Dropzone from 'dropzone';

import './bootstrap';
import './components/navbar/navbar'


Dropzone.autoDiscover = false;

const dropzone = new Dropzone('#dropzone', {
  dictDefaultMessage: 'Drop files here to upload',
  acceptedFiles: ".png,.jpg,.gif,.bmp,.jpeg",
  addRemoveLinks: true,
  dictRemoveFile: 'Remove',
  maxFiles: 1,
  uploadMultiple: false,
  init: function () {
    if(document.querySelector('[name="image"]').value.trim()) {
      const imagenPublicada = {};
      imagenPublicada.size = 1234;
      imagenPublicada.name = document.querySelector('[name="image"]').value;

      this.options.addedfile.call(this, imagenPublicada);
      this.options.thumbnail.call(this, imagenPublicada, `/uploads/${imagenPublicada.name}`);

      imagenPublicada.previewElement.classList.add('dz-success', 'dz-complete');
    }
  }
});


dropzone.on('success', function (file, response) {
  document.querySelector('[name="image"]').value = response.image;
})

dropzone.on('removedfile', function (file) {
  document.querySelector('[name="image"]').value = '';
});