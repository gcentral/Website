import SwaggerUI from 'swagger-ui'
import '../../../node_modules/swagger-ui/dist/swagger-ui.css'

SwaggerUI({
  dom_id: '#swagger',
  url: '/api/gcentral-api.json'
})