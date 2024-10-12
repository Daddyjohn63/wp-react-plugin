import { createRoot } from '@wordpress/element';
import { createElement } from '@wordpress/element';

const ReactDemoComponent = ({ text }) => {
  return createElement('h1', null, text);
};

document.addEventListener('DOMContentLoaded', function () {
  const containers = document.querySelectorAll('[id^="react-demo-container"]');
  containers.forEach(container => {
    const text = container.getAttribute('data-text');
    const root = createRoot(container);
    root.render(createElement(ReactDemoComponent, { text: text }));
  });
});
