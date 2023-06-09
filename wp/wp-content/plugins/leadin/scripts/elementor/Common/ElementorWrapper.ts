import { styled } from '@linaria/react';

interface IElementorWrapperProps {
  pluginPath?: string;
}

export default styled.div<IElementorWrapperProps>`
  background-image: ${props =>
    `url(${props.pluginPath}/plugin/assets/images/hubspot.svg)`};
  background-color: #f5f8fa;
  background-repeat: no-repeat;
  background-position: center 25px;
  background-size: 120px;
  color: #33475b;
  font-family: 'Lexend Deca', Helvetica, Arial, sans-serif;
  font-size: 14px;

  padding: ${(props: any) => props.padding || '90px 20% 25px'};

  p {
    font-size: inherit !important;
    line-height: 24px;
    margin: 4px 0;
  }
`;
