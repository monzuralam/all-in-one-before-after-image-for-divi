// External Dependencies
import React, { Component } from "react";

import { PlaceHolderImage } from "./PlaceHolderImage";

// Internal Dependencies
import "../../../assets/css/twentytwenty.css";
import "./style.css";

class BeforeAfterImage extends Component {
  constructor(props){
    super(props);
    this.scriptRef = React.createRef();
  }

  componentDidMount(){
    this.loadScript('jquery.event.move');
    this.loadScript('jquery.twentytwenty');
    this.loadScript('main');
  }

  loadScript = (file) => {
    const script = document.createElement('script');
    script.src = `/wp-content/plugins/all-in-one-before-after-image-for-divi/assets/js/${file}.js`;

    script.onload = () => {
      console.log('loading script');
    }

    document.head.appendChild(script);
  }

  static slug = "aiobai_before_after_image";

  _render_before_after_image = () => {
    let props = this.props,
      before_image = props.before_image ? props.before_image : PlaceHolderImage,
      after_image = props.after_image ? props.after_image : PlaceHolderImage;

    return (
      <div className="aiobai-image" id="aiobai-init">
        <img src={before_image} alt="aiobai" />
        <img src={after_image} alt="aiobai" />
      </div>
    );
  };

  render() {
    return (
      <div className="aiobai-wrapper">{this._render_before_after_image()}</div>
    );
  }
}

export default BeforeAfterImage;
