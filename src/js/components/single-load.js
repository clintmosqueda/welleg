export default function singleLoad() {
  window.addEventListener('load', () => {
    let url = window.location.href
    let the_arr = url.split('/');
    the_arr.pop();
    the_arr.pop();
    let finalUrl = the_arr.join('/');
    window.location.href = finalUrl;
  });
}