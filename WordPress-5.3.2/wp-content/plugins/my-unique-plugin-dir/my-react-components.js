class Hello extends React.Component {
    render() {
        return React.createElement('div', null, `Hello ${this.props.toWhat}`);
    }
}

window.jQuery(() => {
    ReactDOM.render(
        React.createElement(Hello, {toWhat: 'React'}, null),
        document.getElementById('react-root')
    );
});
