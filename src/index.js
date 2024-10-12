import { createRoot } from '@wordpress/element';
import App from './App';

document.addEventListener('DOMContentLoaded', function () {
  const containers = document.querySelectorAll('[id^="react-demo-container"]');
  containers.forEach(container => {
    const text = container.getAttribute('data-text');
    const root = createRoot(container);
    root.render(<App text={text} />);
  });
});
