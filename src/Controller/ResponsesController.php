<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Responses Controller
 *
 * @property \App\Model\Table\ResponsesTable $Responses
 */
class ResponsesController extends AppController
{/**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $response = $this->Responses->newEmptyEntity();
        if ($this->request->is('post')) {
            $response = $this->Responses->patchEntity($response, $this->request->getData());
            if ($this->Responses->save($response)) {
                $this->Flash->success(__('The response has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The response could not be saved. Please, try again.'));
        }
        $questions = $this->Responses->Questions->find('all')->toArray(); // Fetch all questions
        $this->set(compact('response', 'questions'));
    }
    
    public function submit()
    {
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            
            // Initialize scores for each team role
            $roleScores = [
                'Team Player' => 0,
                'Innovator' => 0,
                'Expert' => 0,
                'Explorer' => 0,
                'Executive' => 0,
                'Analyst' => 0,
                'Driver' => 0,
                'Chairperson' => 0,
                'Completer' => 0,
            ];
    
            // Define scoring logic based on answers
            foreach ($data as $key => $value) {
                if (strpos($key, 'question') === 0) { // Check if the key starts with 'question'
                    switch ($value) {
                        case 'Gregarious':
                            $roleScores['Explorer'] += 5; // Adjusted to ensure total does not exceed 100
                            break;
                        case 'Challenging':
                            $roleScores['Driver'] += 5;
                            break;
                        case 'Practical':
                            $roleScores['Completer'] += 5;
                            break;
                        case 'Critical':
                            $roleScores['Analyst'] += 5;
                            break;
                        case 'Orderly':
                            $roleScores['Executive'] += 5;
                            break;
                        case 'Communicative':
                            $roleScores['Team Player'] += 5;
                            break;
                        case 'Curious':
                            $roleScores['Innovator'] += 5;
                            break;
                        case 'Respectful':
                            $roleScores['Chairperson'] += 5;
                            break;
                        case 'Impatient':
                            $roleScores['Driver'] += 5;
                            break;
                        case 'Sensitive':
                            $roleScores['Team Player'] += 5;
                            break;
                        case 'Sensible':
                            $roleScores['Analyst'] += 5;
                            break;
                        case 'Agreeable':
                            $roleScores['Team Player'] += 5;
                            break;
                        case 'Networking':
                            $roleScores['Explorer'] += 5;
                            break;
                        case 'Controlling':
                            $roleScores['Executive'] += 5;
                            break;
                        case 'Systematic':
                            $roleScores['Analyst'] += 5;
                            break;
                        case 'Diplomatic':
                            $roleScores['Chairperson'] += 5;
                            break;
                        case 'Extrovert':
                            $roleScores['Explorer'] += 5;
                            break;
                        case 'Independent':
                            $roleScores['Innovator'] += 5;
                            break;
                        case 'Organize':
                            $roleScores['Executive'] += 5;
                            break;
                        case 'Improvise':
                            $roleScores['Innovator'] += 5;
                            break;
                        case 'Concrete Actions':
                            $roleScores['Completer'] += 5;
                            break;
                        case 'Being Original':
                            $roleScores['Innovator'] += 5;
                            break;
                        case 'Scientific':
                            $roleScores['Analyst'] += 5;
                            break;
                        case 'Impulsive':
                            $roleScores['Driver'] += 5;
                            break;
                        case 'Fantasize':
                            $roleScores['Innovator'] += 5;
                            break;
                        case 'Convey':
                            $roleScores['Team Player'] += 5;
                            break;
                        case 'Ambitious':
                            $roleScores['Executive'] += 5;
                            break;
                        case 'Harmonious':
                            $roleScores['Team Player'] += 5;
                            break;
                        case 'Restless':
                            $roleScores['Explorer'] += 5;
                            break;
                        case 'Friendly':
                            $roleScores['Team Player'] += 5;
                            break;
                        case 'Coordinating':
                            $roleScores['Chairperson'] += 5;
                            break;
                        case 'Autonomy':
                            $roleScores['Innovator'] += 5;
                            break;
                        case 'Wide Interest':
                            $roleScores['Explorer'] += 5;
                            break;
                        case 'Avoid Conflict':
                            $roleScores['Team Player'] += 5;
                            break;
                        case 'Solidarity':
                            $roleScores['Team Player'] += 5;
                            break;
                        case 'Individualistic':
                            $roleScores['Innovator'] += 5;
                            break;
                        case 'Sober':
                            $roleScores['Analyst'] += 5;
                            break;
                        case 'Emotional':
                            $roleScores['Driver'] += 5;
                            break;
                        default:
                            // Handle unexpected values if necessary
                            break;
                    }
                }
            }
    
            // Ensure no role exceeds 25 points
            foreach ($roleScores as $role => $score) {
                if ($score > 25) {
                    $roleScores[$role] = 25;
                }
            }
    
            // Calculate total points
        $totalPoints = array_sum($roleScores);

        // Normalize scores to percentages
        $rolePercentages = [];
        foreach ($roleScores as $role => $score) {
            $rolePercentages[$role] = $totalPoints > 0 ? round(($score / $totalPoints) * 100) : 0;
        }

        // Save the response (if needed)
        $response = $this->Responses->newEmptyEntity();
        $response->data = json_encode($rolePercentages); // Save the scores as JSON or in a suitable format
        $this->Responses->save($response);

        // Redirect to the results page with JSON encoded scores
        return $this->redirect(['action' => 'results', '?' => ['scores' => json_encode($rolePercentages)]]);
        }
    }

    public function results()
{
    $scores = $this->request->getQuery('scores');
    if (is_string($scores)) {
        $roleScores = json_decode($scores, true);
    } else {
        $roleScores = []; // Handle the case where scores are not a string
    }

    // Prepare data for the view
    $this->set(compact('roleScores'));
}
}
