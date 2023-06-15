module.exports = {
  env: {
    browser: true,
    es2021: true
  },
  extends: [
    'plugin:react/recommended',
    'airbnb',
    'airbnb-typescript',
    'prettier',
  ],
  parserOptions: {
    ecmaVersion: 'latest',
    sourceType: 'module',
    parser: '@typescript-eslint/parser',
    project: './tsconfig.json',
  },
  plugins: [
    'react'
  ],
  rules: {
    "react/prop-types": "off", // propsの型チェックをしない
    "no-plusplus": "off", // ++を許可する
    'react/jsx-props-no-spreading': 'off', // スプレット構文を使えるようにする,
    'jsx-a11y/anchor-is-valid': 'off', // aタグのhref属性にziggyや#を許可する,
    'react/no-array-index-key': 'off', // keyにindexを許可する,
  }
}
