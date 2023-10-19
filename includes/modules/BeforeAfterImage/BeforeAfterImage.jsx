// External Dependencies
import React, { Component } from "react";

import { PlaceHolderImage } from "./PlaceHolderImage";

// Internal Dependencies
import "./style.css";

class BeforeAfterImage extends Component {
  static slug = "aiobai_before_after_image";

  _render_before_after_image = () => {
    let props = this.props,
      before_image = props.before_image ? props.before_image : PlaceHolderImage,
      after_image = props.after_image ? props.after_image : PlaceHolderImage;

    return (
      <div className="aiobai-image">
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
