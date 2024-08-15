# local-claude-ui

## Initial master prompt

Create a very simple Claude LLM Chat interface with the Anthropic Claude API . Everything from API requests to conversation state is handled clientside using JS, with a frontend made with semantic HTML and CSS. Have a dropdown to select the model. Preferences and option selection states are handled using LocalStorage. This site is designed to be run from the local computer as an alternative to the Claude.ai site, and that uses the user's API key. This means that we don't need to consider any security features, however we should block requests that are not from localhost. Otherwise, we can assume the user is the superadmin of everything.
